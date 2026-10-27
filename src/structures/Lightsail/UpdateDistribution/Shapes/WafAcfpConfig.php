<?php

namespace Sunaoka\Aws\Structures\Lightsail\UpdateDistribution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'FORM_ENCODED'|null $payloadType
 * @property string|null $creationPath
 * @property string|null $registrationPagePath
 * @property WafResponseInspection|null $responseInspection
 */
class WafAcfpConfig extends Shape
{
    /**
     * @param array{
     *     payloadType?: 'JSON'|'FORM_ENCODED'|null,
     *     creationPath?: string|null,
     *     registrationPagePath?: string|null,
     *     responseInspection?: WafResponseInspection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
