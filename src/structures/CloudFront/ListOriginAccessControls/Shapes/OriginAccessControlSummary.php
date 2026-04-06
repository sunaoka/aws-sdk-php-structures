<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListOriginAccessControls\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Description
 * @property string $Name
 * @property 'sigv4' $SigningProtocol
 * @property 'never'|'always'|'no-override' $SigningBehavior
 * @property 's3'|'mediastore'|'mediapackagev2'|'lambda' $OriginAccessControlOriginType
 */
class OriginAccessControlSummary extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Description: string,
     *     Name: string,
     *     SigningProtocol: 'sigv4',
     *     SigningBehavior: 'never'|'always'|'no-override',
     *     OriginAccessControlOriginType: 's3'|'mediastore'|'mediapackagev2'|'lambda'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
