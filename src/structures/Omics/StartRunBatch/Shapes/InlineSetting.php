<?php

namespace Sunaoka\Aws\Structures\Omics\StartRunBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $runSettingId
 * @property string|null $name
 * @property string|null $outputUri
 * @property int<0, 100000>|null $priority
 * @property RunParameters|null $parameters
 * @property string|null $outputBucketOwnerId
 * @property array<string, string>|null $runTags
 */
class InlineSetting extends Shape
{
    /**
     * @param array{
     *     runSettingId: string,
     *     name?: string|null,
     *     outputUri?: string|null,
     *     priority?: int<0, 100000>|null,
     *     parameters?: RunParameters|null,
     *     outputBucketOwnerId?: string|null,
     *     runTags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
