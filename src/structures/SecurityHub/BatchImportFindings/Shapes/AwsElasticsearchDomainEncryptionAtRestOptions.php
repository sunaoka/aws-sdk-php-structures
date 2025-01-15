<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $KmsKeyId
 */
class AwsElasticsearchDomainEncryptionAtRestOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
