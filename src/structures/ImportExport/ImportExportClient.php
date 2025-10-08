<?php

namespace Sunaoka\Aws\Structures\ImportExport;

class ImportExportClient extends \Aws\ImportExport\ImportExportClient
{
    use CancelJob\CancelJobTrait;
    use CreateJob\CreateJobTrait;
    use GetShippingLabel\GetShippingLabelTrait;
    use GetStatus\GetStatusTrait;
    use ListJobs\ListJobsTrait;
    use UpdateJob\UpdateJobTrait;
}
