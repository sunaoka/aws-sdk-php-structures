<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateAs2805KekValidation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property Shapes\As2805KekValidationType $KekValidationType
 * @property 'VARIANT_MASK_82C0'|'VARIANT_MASK_82' $RandomKeySendVariantMask
 */
class GenerateAs2805KekValidationRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     KekValidationType: Shapes\As2805KekValidationType,
     *     RandomKeySendVariantMask: 'VARIANT_MASK_82C0'|'VARIANT_MASK_82'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
