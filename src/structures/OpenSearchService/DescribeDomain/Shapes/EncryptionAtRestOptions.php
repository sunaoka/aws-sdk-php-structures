<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $KmsKeyId
 */
class EncryptionAtRestOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
