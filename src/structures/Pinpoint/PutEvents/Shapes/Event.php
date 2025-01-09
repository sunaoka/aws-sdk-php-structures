<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AppPackageName
 * @property string $AppTitle
 * @property string $AppVersionCode
 * @property array<string, string> $Attributes
 * @property string $ClientSdkVersion
 * @property string $EventType
 * @property array<string, double> $Metrics
 * @property string $SdkName
 * @property Session $Session
 * @property string $Timestamp
 */
class Event extends Shape
{
    /**
     * @param array{
     *     AppPackageName?: string,
     *     AppTitle?: string,
     *     AppVersionCode?: string,
     *     Attributes?: array<string, string>,
     *     ClientSdkVersion?: string,
     *     EventType: string,
     *     Metrics?: array<string, double>,
     *     SdkName?: string,
     *     Session?: Session,
     *     Timestamp: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
