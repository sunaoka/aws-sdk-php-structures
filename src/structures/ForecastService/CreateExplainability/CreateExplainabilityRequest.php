<?php

namespace Sunaoka\Aws\Structures\ForecastService\CreateExplainability;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplainabilityName
 * @property string $ResourceArn
 * @property Shapes\ExplainabilityConfig $ExplainabilityConfig
 * @property Shapes\DataSource|null $DataSource
 * @property Shapes\Schema|null $Schema
 * @property bool|null $EnableVisualization
 * @property string|null $StartDateTime
 * @property string|null $EndDateTime
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateExplainabilityRequest extends Request
{
    /**
     * @param array{
     *     ExplainabilityName: string,
     *     ResourceArn: string,
     *     ExplainabilityConfig: Shapes\ExplainabilityConfig,
     *     DataSource?: Shapes\DataSource|null,
     *     Schema?: Shapes\Schema|null,
     *     EnableVisualization?: bool|null,
     *     StartDateTime?: string|null,
     *     EndDateTime?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
