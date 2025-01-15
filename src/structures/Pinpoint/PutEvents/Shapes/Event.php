<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AppPackageName
 * @property string|null $AppTitle
 * @property string|null $AppVersionCode
 * @property array<string, string>|null $Attributes
 * @property string|null $ClientSdkVersion
 * @property string $EventType
 * @property array<string, double>|null $Metrics
 * @property string|null $SdkName
 * @property Session|null $Session
 * @property string $Timestamp
 */
class Event extends Shape
{
    /**
     * @param array{
     *     AppPackageName?: string|null,
     *     AppTitle?: string|null,
     *     AppVersionCode?: string|null,
     *     Attributes?: array<string, string>|null,
     *     ClientSdkVersion?: string|null,
     *     EventType: string,
     *     Metrics?: array<string, double>|null,
     *     SdkName?: string|null,
     *     Session?: Session|null,
     *     Timestamp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
