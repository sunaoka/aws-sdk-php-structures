<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityName
 * @property string $ResourceArn
 * @property Shapes\ExplainabilityConfig $ExplainabilityConfig
 * @property Shapes\DataSource $DataSource
 * @property Shapes\Schema $Schema
 * @property bool $EnableVisualization
 * @property string $StartDateTime
 * @property string $EndDateTime
 * @property list<Shapes\Tag> $Tags
 */
class CreateExplainabilityRequest extends Request
{
    /**
     * @param array{
     *     ExplainabilityName: string,
     *     ResourceArn: string,
     *     ExplainabilityConfig: Shapes\ExplainabilityConfig,
     *     DataSource?: Shapes\DataSource,
     *     Schema?: Shapes\Schema,
     *     EnableVisualization?: bool,
     *     StartDateTime?: string,
     *     EndDateTime?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
