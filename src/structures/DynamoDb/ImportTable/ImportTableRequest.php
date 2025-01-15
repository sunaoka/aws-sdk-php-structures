<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ImportTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\S3BucketSource $S3BucketSource
 * @property 'DYNAMODB_JSON'|'ION'|'CSV' $InputFormat
 * @property Shapes\InputFormatOptions|null $InputFormatOptions
 * @property 'GZIP'|'ZSTD'|'NONE'|null $InputCompressionType
 * @property Shapes\TableCreationParameters $TableCreationParameters
 */
class ImportTableRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     S3BucketSource: Shapes\S3BucketSource,
     *     InputFormat: 'DYNAMODB_JSON'|'ION'|'CSV',
     *     InputFormatOptions?: Shapes\InputFormatOptions|null,
     *     InputCompressionType?: 'GZIP'|'ZSTD'|'NONE'|null,
     *     TableCreationParameters: Shapes\TableCreationParameters
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
