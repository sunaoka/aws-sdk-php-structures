<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string $bucketOwnerAccountId
 * @property list<string> $inclusionPrefixes
 */
class S3DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     bucketOwnerAccountId?: string,
     *     inclusionPrefixes?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
