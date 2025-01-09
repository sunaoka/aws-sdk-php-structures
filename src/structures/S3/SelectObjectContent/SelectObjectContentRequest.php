<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string $SSECustomerAlgorithm
 * @property string $SSECustomerKey
 * @property string $SSECustomerKeyMD5
 * @property string $Expression
 * @property 'SQL' $ExpressionType
 * @property Shapes\RequestProgress $RequestProgress
 * @property Shapes\InputSerialization $InputSerialization
 * @property Shapes\OutputSerialization $OutputSerialization
 * @property Shapes\ScanRange $ScanRange
 * @property string $ExpectedBucketOwner
 */
class SelectObjectContentRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     SSECustomerAlgorithm?: string,
     *     SSECustomerKey?: string,
     *     SSECustomerKeyMD5?: string,
     *     Expression: string,
     *     ExpressionType: 'SQL',
     *     RequestProgress?: Shapes\RequestProgress,
     *     InputSerialization: Shapes\InputSerialization,
     *     OutputSerialization: Shapes\OutputSerialization,
     *     ScanRange?: Shapes\ScanRange,
     *     ExpectedBucketOwner?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
