<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketArn
 * @property list<string>|null $inclusionPrefixes
 * @property string|null $bucketOwnerAccountId
 */
class S3DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     bucketArn: string,
     *     inclusionPrefixes?: list<string>|null,
     *     bucketOwnerAccountId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
