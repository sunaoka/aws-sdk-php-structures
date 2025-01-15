<?php

namespace Sunaoka\Aws\Structures\mgn\UpdateLaunchConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cloudWatchLogGroupName
 * @property 'TEST_AND_CUTOVER'|'CUTOVER_ONLY'|'TEST_ONLY'|null $deployment
 * @property string|null $s3LogBucket
 * @property string|null $s3OutputKeyPrefix
 * @property list<SsmDocument>|null $ssmDocuments
 */
class PostLaunchActions extends Shape
{
    /**
     * @param array{
     *     cloudWatchLogGroupName?: string|null,
     *     deployment?: 'TEST_AND_CUTOVER'|'CUTOVER_ONLY'|'TEST_ONLY'|null,
     *     s3LogBucket?: string|null,
     *     s3OutputKeyPrefix?: string|null,
     *     ssmDocuments?: list<SsmDocument>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
