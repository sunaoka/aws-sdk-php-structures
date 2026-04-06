<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CardGenerationAttributes $GenerationAttributes
 * @property string $KeyIdentifier
 * @property string $PrimaryAccountNumber
 * @property int<3, 5>|null $ValidationDataLength
 */
class GenerateCardValidationDataRequest extends Request
{
    /**
     * @param array{
     *     GenerationAttributes: Shapes\CardGenerationAttributes,
     *     KeyIdentifier: string,
     *     PrimaryAccountNumber: string,
     *     ValidationDataLength?: int<3, 5>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
