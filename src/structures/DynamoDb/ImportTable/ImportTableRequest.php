<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property Shapes\S3BucketSource $S3BucketSource
 * @property 'DYNAMODB_JSON'|'ION'|'CSV' $InputFormat
 * @property Shapes\InputFormatOptions $InputFormatOptions
 * @property 'GZIP'|'ZSTD'|'NONE' $InputCompressionType
 * @property Shapes\TableCreationParameters $TableCreationParameters
 */
class ImportTableRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     S3BucketSource: Shapes\S3BucketSource,
     *     InputFormat: 'DYNAMODB_JSON'|'ION'|'CSV',
     *     InputFormatOptions?: Shapes\InputFormatOptions,
     *     InputCompressionType?: 'GZIP'|'ZSTD'|'NONE',
     *     TableCreationParameters: Shapes\TableCreationParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
