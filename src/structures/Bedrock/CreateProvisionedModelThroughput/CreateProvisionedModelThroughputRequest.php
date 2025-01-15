<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientRequestToken
 * @property int<1, max> $modelUnits
 * @property string $provisionedModelName
 * @property string $modelId
 * @property 'OneMonth'|'SixMonths'|null $commitmentDuration
 * @property list<Shapes\Tag>|null $tags
 */
class CreateProvisionedModelThroughputRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string|null,
     *     modelUnits: int<1, max>,
     *     provisionedModelName: string,
     *     modelId: string,
     *     commitmentDuration?: 'OneMonth'|'SixMonths'|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
