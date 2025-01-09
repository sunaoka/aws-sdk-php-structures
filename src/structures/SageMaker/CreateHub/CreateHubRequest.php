<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $HubDescription
 * @property string $HubDisplayName
 * @property list<string> $HubSearchKeywords
 * @property Shapes\HubS3StorageConfig $S3StorageConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateHubRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubDescription: string,
     *     HubDisplayName?: string,
     *     HubSearchKeywords?: list<string>,
     *     S3StorageConfig?: Shapes\HubS3StorageConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
