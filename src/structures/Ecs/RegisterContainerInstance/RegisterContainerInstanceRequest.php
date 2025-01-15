<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterContainerInstance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cluster
 * @property string|null $instanceIdentityDocument
 * @property string|null $instanceIdentityDocumentSignature
 * @property list<Shapes\Resource>|null $totalResources
 * @property Shapes\VersionInfo|null $versionInfo
 * @property string|null $containerInstanceArn
 * @property list<Shapes\Attribute>|null $attributes
 * @property list<Shapes\PlatformDevice>|null $platformDevices
 * @property list<Shapes\Tag>|null $tags
 */
class RegisterContainerInstanceRequest extends Request
{
    /**
     * @param array{
     *     cluster?: string|null,
     *     instanceIdentityDocument?: string|null,
     *     instanceIdentityDocumentSignature?: string|null,
     *     totalResources?: list<Shapes\Resource>|null,
     *     versionInfo?: Shapes\VersionInfo|null,
     *     containerInstanceArn?: string|null,
     *     attributes?: list<Shapes\Attribute>|null,
     *     platformDevices?: list<Shapes\PlatformDevice>|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
