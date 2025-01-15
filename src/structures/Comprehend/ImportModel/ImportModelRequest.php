<?php

namespace Sunaoka\Aws\Structures\Comprehend\ImportModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceModelArn
 * @property string|null $ModelName
 * @property string|null $VersionName
 * @property string|null $ModelKmsKeyId
 * @property string|null $DataAccessRoleArn
 * @property list<Shapes\Tag>|null $Tags
 */
class ImportModelRequest extends Request
{
    /**
     * @param array{
     *     SourceModelArn: string,
     *     ModelName?: string|null,
     *     VersionName?: string|null,
     *     ModelKmsKeyId?: string|null,
     *     DataAccessRoleArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
