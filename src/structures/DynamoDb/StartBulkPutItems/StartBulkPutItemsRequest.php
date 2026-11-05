<?php

namespace Sunaoka\Aws\Structures\DynamoDb\StartBulkPutItems;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\InputS3Configuration $InputS3Configuration
 * @property Shapes\OutputS3Configuration $OutputS3Configuration
 * @property string $TableName
 * @property int<1024, max>|null $MaxWriteRequestUnits
 * @property 'STANDARD'|'ACCELERATED'|null $PerformanceTier
 */
class StartBulkPutItemsRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     InputS3Configuration: Shapes\InputS3Configuration,
     *     OutputS3Configuration: Shapes\OutputS3Configuration,
     *     TableName: string,
     *     MaxWriteRequestUnits?: int<1024, max>|null,
     *     PerformanceTier?: 'STANDARD'|'ACCELERATED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
