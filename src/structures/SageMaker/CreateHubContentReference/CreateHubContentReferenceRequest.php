<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHubContentReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $SageMakerPublicHubContentArn
 * @property string|null $HubContentName
 * @property string|null $MinVersion
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHubContentReferenceRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     SageMakerPublicHubContentArn: string,
     *     HubContentName?: string|null,
     *     MinVersion?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
