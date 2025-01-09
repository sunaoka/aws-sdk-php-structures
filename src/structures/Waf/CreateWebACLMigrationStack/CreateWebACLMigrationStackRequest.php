<?php

namespace Sunaoka\Aws\Structures\Waf\CreateWebACLMigrationStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WebACLId
 * @property string $S3BucketName
 * @property bool $IgnoreUnsupportedType
 */
class CreateWebACLMigrationStackRequest extends Request
{
    /**
     * @param array{
     *     WebACLId: string,
     *     S3BucketName: string,
     *     IgnoreUnsupportedType: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
