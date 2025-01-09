<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeleteLaunchTemplateVersionsResponseSuccessItem> $SuccessfullyDeletedLaunchTemplateVersions
 * @property list<Shapes\DeleteLaunchTemplateVersionsResponseErrorItem> $UnsuccessfullyDeletedLaunchTemplateVersions
 */
class DeleteLaunchTemplateVersionsResponse extends Response
{
}
