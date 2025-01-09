<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutLoggingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SingleHeader $SingleHeader
 * @property SingleQueryArgument $SingleQueryArgument
 * @property AllQueryArguments $AllQueryArguments
 * @property UriPath $UriPath
 * @property QueryString $QueryString
 * @property Body $Body
 * @property Method $Method
 * @property JsonBody $JsonBody
 * @property Headers $Headers
 * @property Cookies $Cookies
 * @property HeaderOrder $HeaderOrder
 * @property JA3Fingerprint $JA3Fingerprint
 */
class FieldToMatch extends Shape
{
    /**
     * @param array{
     *     SingleHeader?: SingleHeader,
     *     SingleQueryArgument?: SingleQueryArgument,
     *     AllQueryArguments?: AllQueryArguments,
     *     UriPath?: UriPath,
     *     QueryString?: QueryString,
     *     Body?: Body,
     *     Method?: Method,
     *     JsonBody?: JsonBody,
     *     Headers?: Headers,
     *     Cookies?: Cookies,
     *     HeaderOrder?: HeaderOrder,
     *     JA3Fingerprint?: JA3Fingerprint
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
