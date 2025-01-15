<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySamlProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\SamlProperties|null $SamlProperties
 * @property list<'SAML_PROPERTIES_USER_ACCESS_URL'|'SAML_PROPERTIES_RELAY_STATE_PARAMETER_NAME'>|null $PropertiesToDelete
 */
class ModifySamlPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     SamlProperties?: Shapes\SamlProperties|null,
     *     PropertiesToDelete?: list<'SAML_PROPERTIES_USER_ACCESS_URL'|'SAML_PROPERTIES_RELAY_STATE_PARAMETER_NAME'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
