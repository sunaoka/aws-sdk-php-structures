<?php

namespace Sunaoka\Aws\Structures\TranscribeService\CreateLanguageModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $S3Uri
 * @property string|null $TuningDataS3Uri
 * @property string $DataAccessRoleArn
 */
class InputDataConfig extends Shape
{
    /**
     * @param array{
     *     S3Uri: string,
     *     TuningDataS3Uri?: string|null,
     *     DataAccessRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
