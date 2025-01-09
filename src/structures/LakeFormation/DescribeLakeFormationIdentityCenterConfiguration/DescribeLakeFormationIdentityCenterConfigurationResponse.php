<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DescribeLakeFormationIdentityCenterConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $CatalogId
 * @property string $InstanceArn
 * @property string $ApplicationArn
 * @property Shapes\ExternalFilteringConfiguration $ExternalFiltering
 * @property list<Shapes\DataLakePrincipal> $ShareRecipients
 * @property string $ResourceShare
 */
class DescribeLakeFormationIdentityCenterConfigurationResponse extends Response
{
}
