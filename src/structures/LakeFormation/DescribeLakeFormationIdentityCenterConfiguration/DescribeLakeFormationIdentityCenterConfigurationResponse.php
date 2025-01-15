<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $CatalogId
 * @property string|null $InstanceArn
 * @property string|null $ApplicationArn
 * @property Shapes\ExternalFilteringConfiguration|null $ExternalFiltering
 * @property list<Shapes\DataLakePrincipal>|null $ShareRecipients
 * @property string|null $ResourceShare
 */
class DescribeLakeFormationIdentityCenterConfigurationResponse extends Response
{
}
