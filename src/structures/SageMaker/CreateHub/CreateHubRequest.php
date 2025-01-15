<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateHub;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property string $HubDescription
 * @property string|null $HubDisplayName
 * @property list<string>|null $HubSearchKeywords
 * @property Shapes\HubS3StorageConfig|null $S3StorageConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateHubRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubDescription: string,
     *     HubDisplayName?: string|null,
     *     HubSearchKeywords?: list<string>|null,
     *     S3StorageConfig?: Shapes\HubS3StorageConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
