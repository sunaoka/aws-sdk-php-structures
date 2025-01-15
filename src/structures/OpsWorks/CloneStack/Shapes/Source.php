<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CloneStack\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'git'|'svn'|'archive'|'s3'|null $Type
 * @property string|null $Url
 * @property string|null $Username
 * @property string|null $Password
 * @property string|null $SshKey
 * @property string|null $Revision
 */
class Source extends Shape
{
    /**
     * @param array{
     *     Type?: 'git'|'svn'|'archive'|'s3'|null,
     *     Url?: string|null,
     *     Username?: string|null,
     *     Password?: string|null,
     *     SshKey?: string|null,
     *     Revision?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
