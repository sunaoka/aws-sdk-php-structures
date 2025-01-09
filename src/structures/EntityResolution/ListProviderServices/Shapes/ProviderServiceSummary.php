<?php

namespace Sunaoka\Aws\Structures\EntityResolution\ListProviderServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $providerName
 * @property string $providerServiceArn
 * @property string $providerServiceDisplayName
 * @property string $providerServiceName
 * @property 'ASSIGNMENT'|'ID_MAPPING' $providerServiceType
 */
class ProviderServiceSummary extends Shape
{
    /**
     * @param array{
     *     providerName: string,
     *     providerServiceArn: string,
     *     providerServiceDisplayName: string,
     *     providerServiceName: string,
     *     providerServiceType: 'ASSIGNMENT'|'ID_MAPPING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
