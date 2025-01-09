<?php

namespace Sunaoka\Aws\Structures\mgn\CreateLaunchConfigurationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cloudWatchLogGroupName
 * @property 'TEST_AND_CUTOVER'|'CUTOVER_ONLY'|'TEST_ONLY' $deployment
 * @property string $s3LogBucket
 * @property string $s3OutputKeyPrefix
 * @property list<SsmDocument> $ssmDocuments
 */
class PostLaunchActions extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupName?: string,
     *     deployment?: 'TEST_AND_CUTOVER'|'CUTOVER_ONLY'|'TEST_ONLY',
     *     s3LogBucket?: string,
     *     s3OutputKeyPrefix?: string,
     *     ssmDocuments?: list<SsmDocument>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
