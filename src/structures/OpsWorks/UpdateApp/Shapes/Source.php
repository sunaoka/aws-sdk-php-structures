<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateApp\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'git'|'svn'|'archive'|'s3' $Type
 * @property string $Url
 * @property string $Username
 * @property string $Password
 * @property string $SshKey
 * @property string $Revision
 */
class Source extends Shape
{
    /**
     * @param array{
     *     Type?: 'git'|'svn'|'archive'|'s3',
     *     Url?: string,
     *     Username?: string,
     *     Password?: string,
     *     SshKey?: string,
     *     Revision?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
