<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainabilityExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityExportName
 * @property string $ExplainabilityArn
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $Format
 */
class CreateExplainabilityExportRequest extends Request
{
    /**
     * @param array{
     *     ExplainabilityExportName: string,
     *     ExplainabilityArn: string,
     *     Destination: Shapes\DataDestination,
     *     Tags?: list<Shapes\Tag>|null,
     *     Format?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
