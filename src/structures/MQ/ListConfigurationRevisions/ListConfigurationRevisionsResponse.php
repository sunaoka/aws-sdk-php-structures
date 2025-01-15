<?php

namespace Sunaoka\Aws\Structures\MQ\ListConfigurationRevisions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ConfigurationId
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\ConfigurationRevision>|null $Revisions
 */
class ListConfigurationRevisionsResponse extends Response
{
}
