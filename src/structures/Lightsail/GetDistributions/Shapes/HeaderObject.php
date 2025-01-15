<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'none'|'allow-list'|'all'|null $option
 * @property list<'Accept'|'Accept-Charset'|'Accept-Datetime'|'Accept-Encoding'|'Accept-Language'|'Authorization'|'CloudFront-Forwarded-Proto'|'CloudFront-Is-Desktop-Viewer'|'CloudFront-Is-Mobile-Viewer'|'CloudFront-Is-SmartTV-Viewer'|'CloudFront-Is-Tablet-Viewer'|'CloudFront-Viewer-Country'|'Host'|'Origin'|'Referer'>|null $headersAllowList
 */
class HeaderObject extends Shape
{
    /**
     * @param array{
     *     option?: 'none'|'allow-list'|'all'|null,
     *     headersAllowList?: list<'Accept'|'Accept-Charset'|'Accept-Datetime'|'Accept-Encoding'|'Accept-Language'|'Authorization'|'CloudFront-Forwarded-Proto'|'CloudFront-Is-Desktop-Viewer'|'CloudFront-Is-Mobile-Viewer'|'CloudFront-Is-SmartTV-Viewer'|'CloudFront-Is-Tablet-Viewer'|'CloudFront-Viewer-Country'|'Host'|'Origin'|'Referer'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
