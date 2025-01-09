<?php

namespace Sunaoka\Aws\Structures\TranscribeService\DescribeLanguageModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string $TuningDataS3Uri
 * @property string $DataAccessRoleArn
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     TuningDataS3Uri?: string,
     *     DataAccessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
