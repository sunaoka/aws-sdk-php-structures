<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\CreateAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowCookies
 * @property bool $EnableXRay
 * @property list<string> $ExcludedPages
 * @property list<string> $FavoritePages
 * @property string $GuestRoleArn
 * @property string $IdentityPoolId
 * @property list<string> $IncludedPages
 * @property double $SessionSampleRate
 * @property list<'errors'|'performance'|'http'> $Telemetries
 */
class AppMonitorConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowCookies?: bool,
     *     EnableXRay?: bool,
     *     ExcludedPages?: list<string>,
     *     FavoritePages?: list<string>,
     *     GuestRoleArn?: string,
     *     IdentityPoolId?: string,
     *     IncludedPages?: list<string>,
     *     SessionSampleRate?: double,
     *     Telemetries?: list<'errors'|'performance'|'http'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
