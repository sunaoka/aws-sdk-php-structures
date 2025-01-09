<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AmexCardSecurityCodeVersion1 $AmexCardSecurityCodeVersion1
 * @property AmexCardSecurityCodeVersion2 $AmexCardSecurityCodeVersion2
 * @property CardVerificationValue1 $CardVerificationValue1
 * @property CardVerificationValue2 $CardVerificationValue2
 * @property CardHolderVerificationValue $CardHolderVerificationValue
 * @property DynamicCardVerificationCode $DynamicCardVerificationCode
 * @property DynamicCardVerificationValue $DynamicCardVerificationValue
 */
class CardGenerationAttributes extends Shape
{
    /**
     * @param array{
     *     AmexCardSecurityCodeVersion1?: AmexCardSecurityCodeVersion1,
     *     AmexCardSecurityCodeVersion2?: AmexCardSecurityCodeVersion2,
     *     CardVerificationValue1?: CardVerificationValue1,
     *     CardVerificationValue2?: CardVerificationValue2,
     *     CardHolderVerificationValue?: CardHolderVerificationValue,
     *     DynamicCardVerificationCode?: DynamicCardVerificationCode,
     *     DynamicCardVerificationValue?: DynamicCardVerificationValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
