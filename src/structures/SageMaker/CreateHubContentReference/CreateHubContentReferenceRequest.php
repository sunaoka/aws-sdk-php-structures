<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $SageMakerPublicHubContentArn
 * @property string $HubContentName
 * @property string $MinVersion
 * @property list<Shapes\Tag> $Tags
 */
class CreateHubContentReferenceRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     SageMakerPublicHubContentArn: string,
     *     HubContentName?: string,
     *     MinVersion?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
