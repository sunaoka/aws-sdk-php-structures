<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $KmsKeyArn
 */
class S3TablesEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
