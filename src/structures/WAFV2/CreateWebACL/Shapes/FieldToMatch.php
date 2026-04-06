<?php

namespace Sunaoka\Aws\Structures\WAFV2\CreateWebACL\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SingleHeader|null $SingleHeader
 * @property SingleQueryArgument|null $SingleQueryArgument
 * @property AllQueryArguments|null $AllQueryArguments
 * @property UriPath|null $UriPath
 * @property QueryString|null $QueryString
 * @property Body|null $Body
 * @property Method|null $Method
 * @property JsonBody|null $JsonBody
 * @property Headers|null $Headers
 * @property Cookies|null $Cookies
 * @property HeaderOrder|null $HeaderOrder
 * @property JA3Fingerprint|null $JA3Fingerprint
 * @property JA4Fingerprint|null $JA4Fingerprint
 * @property UriFragment|null $UriFragment
 */
class FieldToMatch extends Shape
{
    /**
     * @param array{
     *     SingleHeader?: SingleHeader|null,
     *     SingleQueryArgument?: SingleQueryArgument|null,
     *     AllQueryArguments?: AllQueryArguments|null,
     *     UriPath?: UriPath|null,
     *     QueryString?: QueryString|null,
     *     Body?: Body|null,
     *     Method?: Method|null,
     *     JsonBody?: JsonBody|null,
     *     Headers?: Headers|null,
     *     Cookies?: Cookies|null,
     *     HeaderOrder?: HeaderOrder|null,
     *     JA3Fingerprint?: JA3Fingerprint|null,
     *     JA4Fingerprint?: JA4Fingerprint|null,
     *     UriFragment?: UriFragment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
