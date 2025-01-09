<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $SourceURI
 */
class DataIntegrationSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     Name?: string,
     *     SourceURI?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
