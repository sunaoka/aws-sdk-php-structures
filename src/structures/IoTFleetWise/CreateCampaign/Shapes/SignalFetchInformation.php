<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\CreateCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fullyQualifiedName
 * @property SignalFetchConfig $signalFetchConfig
 * @property int $conditionLanguageVersion
 * @property list<string> $actions
 */
class SignalFetchInformation extends Shape
{
    /**
     * @param array{
     *     fullyQualifiedName: string,
     *     signalFetchConfig: SignalFetchConfig,
     *     conditionLanguageVersion?: int,
     *     actions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
