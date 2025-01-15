<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteLaunchTemplateVersions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\DeleteLaunchTemplateVersionsResponseSuccessItem>|null $SuccessfullyDeletedLaunchTemplateVersions
 * @property list<Shapes\DeleteLaunchTemplateVersionsResponseErrorItem>|null $UnsuccessfullyDeletedLaunchTemplateVersions
 */
class DeleteLaunchTemplateVersionsResponse extends Response
{
}
