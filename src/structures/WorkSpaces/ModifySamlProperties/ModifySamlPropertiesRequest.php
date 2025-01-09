<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\ModifySamlProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceId
 * @property Shapes\SamlProperties $SamlProperties
 * @property list<'SAML_PROPERTIES_USER_ACCESS_URL'|'SAML_PROPERTIES_RELAY_STATE_PARAMETER_NAME'> $PropertiesToDelete
 */
class ModifySamlPropertiesRequest extends Request
{
    /**
     * @param array{
     *     ResourceId: string,
     *     SamlProperties?: Shapes\SamlProperties,
     *     PropertiesToDelete?: list<'SAML_PROPERTIES_USER_ACCESS_URL'|'SAML_PROPERTIES_RELAY_STATE_PARAMETER_NAME'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
