<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateProvisionedModelThroughput;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientRequestToken
 * @property int<1, max> $modelUnits
 * @property string $provisionedModelName
 * @property string $modelId
 * @property 'OneMonth'|'SixMonths' $commitmentDuration
 * @property list<Shapes\Tag> $tags
 */
class CreateProvisionedModelThroughputRequest extends Request
{
    /**
     * @param array{
     *     clientRequestToken?: string,
     *     modelUnits: int<1, max>,
     *     provisionedModelName: string,
     *     modelId: string,
     *     commitmentDuration?: 'OneMonth'|'SixMonths',
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
