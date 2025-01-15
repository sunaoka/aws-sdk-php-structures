<?php

namespace Sunaoka\Aws\Structures\S3\SelectObjectContent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Bucket
 * @property string $Key
 * @property string|null $SSECustomerAlgorithm
 * @property string|null $SSECustomerKey
 * @property string|null $SSECustomerKeyMD5
 * @property string $Expression
 * @property 'SQL' $ExpressionType
 * @property Shapes\RequestProgress|null $RequestProgress
 * @property Shapes\InputSerialization $InputSerialization
 * @property Shapes\OutputSerialization $OutputSerialization
 * @property Shapes\ScanRange|null $ScanRange
 * @property string|null $ExpectedBucketOwner
 */
class SelectObjectContentRequest extends Request
{
    /**
     * @param array{
     *     Bucket: string,
     *     Key: string,
     *     SSECustomerAlgorithm?: string|null,
     *     SSECustomerKey?: string|null,
     *     SSECustomerKeyMD5?: string|null,
     *     Expression: string,
     *     ExpressionType: 'SQL',
     *     RequestProgress?: Shapes\RequestProgress|null,
     *     InputSerialization: Shapes\InputSerialization,
     *     OutputSerialization: Shapes\OutputSerialization,
     *     ScanRange?: Shapes\ScanRange|null,
     *     ExpectedBucketOwner?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
