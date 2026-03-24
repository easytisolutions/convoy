import { ComponentProps } from 'react'

// EasyTI Cloud logo outline
const LogoOutline = (props: ComponentProps<'svg'>) => {
    return (
        <svg
            xmlns='http://www.w3.org/2000/svg'
            fill='none'
            stroke='currentColor'
            viewBox='0 0 512 512'
            {...props}
        >
            {/* Cloud outline */}
            <path
                strokeLinecap='round'
                strokeWidth='18'
                d='M466,340 C466,382 430,416 386,416 L130,416 C86,416 50,382 50,340 C50,302 76,270 112,262 C110,254 108,246 108,238 C108,192 148,154 192,154 C210,154 226,162 240,174 C256,144 284,126 318,126 C378,126 426,172 428,232 C450,244 466,290 466,340 Z'
            />
            {/* "E" letter */}
            <path
                strokeLinecap='round'
                strokeLinejoin='round'
                strokeWidth='18'
                fill='none'
                d='M186,260 H310 M186,316 H298 M186,372 H310 M186,260 V404'
            />
        </svg>
    )
}

export default LogoOutline
