<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property string|null $bucketOwnerAccountId
 * @property list<string>|null $inclusionPrefixes
 */
class S3DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     bucketOwnerAccountId?: string|null,
     *     inclusionPrefixes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
