<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Command
 * @property int|null $Interval
 * @property int|null $Retries
 * @property int|null $StartPeriod
 * @property int|null $Timeout
 */
class AwsEcsTaskDefinitionContainerDefinitionsHealthCheckDetails extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>|null,
     *     Interval?: int|null,
     *     Retries?: int|null,
     *     StartPeriod?: int|null,
     *     Timeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
