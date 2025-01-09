<?php

namespace Sunaoka\Aws\Structures\Comprehend\ImportModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceModelArn
 * @property string $ModelName
 * @property string $VersionName
 * @property string $ModelKmsKeyId
 * @property string $DataAccessRoleArn
 * @property list<Shapes\Tag> $Tags
 */
class ImportModelRequest extends Request
{
    /**
     * @param array{
     *     SourceModelArn: string,
     *     ModelName?: string,
     *     VersionName?: string,
     *     ModelKmsKeyId?: string,
     *     DataAccessRoleArn?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
