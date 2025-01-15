<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateStoreImageTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string $Bucket
 * @property list<Shapes\S3ObjectTag>|null $S3ObjectTags
 * @property bool|null $DryRun
 */
class CreateStoreImageTaskRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     Bucket: string,
     *     S3ObjectTags?: list<Shapes\S3ObjectTag>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
