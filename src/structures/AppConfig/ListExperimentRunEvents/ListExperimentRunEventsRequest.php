<?php

namespace Sunaoka\Aws\Structures\AppConfig\ListExperimentRunEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationIdentifier
 * @property string $ExperimentDefinitionIdentifier
 * @property int<1, max> $Run
 * @property int<1, 50>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExperimentRunEventsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationIdentifier: string,
     *     ExperimentDefinitionIdentifier: string,
     *     Run: int<1, max>,
     *     MaxResults?: int<1, 50>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
