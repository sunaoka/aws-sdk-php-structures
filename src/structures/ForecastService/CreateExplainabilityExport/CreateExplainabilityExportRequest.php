<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainabilityExport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityExportName
 * @property string $ExplainabilityArn
 * @property Shapes\DataDestination $Destination
 * @property list<Shapes\Tag> $Tags
 * @property string $Format
 */
class CreateExplainabilityExportRequest extends Request
{
    /**
     * @param array{
     *     ExplainabilityExportName: string,
     *     ExplainabilityArn: string,
     *     Destination: Shapes\DataDestination,
     *     Tags?: list<Shapes\Tag>,
     *     Format?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
