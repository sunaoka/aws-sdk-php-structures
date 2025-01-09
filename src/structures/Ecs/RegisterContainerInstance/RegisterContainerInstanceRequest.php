<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $cluster
 * @property string $instanceIdentityDocument
 * @property string $instanceIdentityDocumentSignature
 * @property list<Shapes\Resource> $totalResources
 * @property Shapes\VersionInfo $versionInfo
 * @property string $containerInstanceArn
 * @property list<Shapes\Attribute> $attributes
 * @property list<Shapes\PlatformDevice> $platformDevices
 * @property list<Shapes\Tag> $tags
 */
class RegisterContainerInstanceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string,
     *     instanceIdentityDocument?: string,
     *     instanceIdentityDocumentSignature?: string,
     *     totalResources?: list<Shapes\Resource>,
     *     versionInfo?: Shapes\VersionInfo,
     *     containerInstanceArn?: string,
     *     attributes?: list<Shapes\Attribute>,
     *     platformDevices?: list<Shapes\PlatformDevice>,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
