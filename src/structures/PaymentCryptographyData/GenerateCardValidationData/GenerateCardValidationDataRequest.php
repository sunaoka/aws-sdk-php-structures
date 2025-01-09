<?php

namespace Sunaoka\Aws\Structures\PaymentCryptographyData\GenerateCardValidationData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 * @property string $PrimaryAccountNumber
 * @property Shapes\CardGenerationAttributes $GenerationAttributes
 * @property int $ValidationDataLength
 */
class GenerateCardValidationDataRequest extends Request
{
    /**
     * @param array{
     *     KeyIdentifier: string,
     *     PrimaryAccountNumber: string,
     *     GenerationAttributes: Shapes\CardGenerationAttributes,
     *     ValidationDataLength?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
