<?php

namespace Sunaoka\Aws\Structures\mgn\GetLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEST_AND_CUTOVER'|'CUTOVER_ONLY'|'TEST_ONLY'|null $deployment
 * @property string|null $s3LogBucket
 * @property string|null $s3OutputKeyPrefix
 * @property string|null $cloudWatchLogGroupName
 * @property list<SsmDocument>|null $ssmDocuments
 */
class PostLaunchActions extends Shape
{
    /**
     * @param array{
     *     deployment?: 'TEST_AND_CUTOVER'|'CUTOVER_ONLY'|'TEST_ONLY'|null,
     *     s3LogBucket?: string|null,
     *     s3OutputKeyPrefix?: string|null,
     *     cloudWatchLogGroupName?: string|null,
     *     ssmDocuments?: list<SsmDocument>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
