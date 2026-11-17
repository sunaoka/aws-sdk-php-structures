<?php

namespace Sunaoka\Aws\Structures\WellArchitected\SendAgentOrganizationalReportDataToS3;

trait SendAgentOrganizationalReportDataToS3Trait
{
    /**
     * @param SendAgentOrganizationalReportDataToS3Request $args
     * @return SendAgentOrganizationalReportDataToS3Response
     */
    public function sendAgentOrganizationalReportDataToS3(SendAgentOrganizationalReportDataToS3Request $args)
    {
        $result = parent::sendAgentOrganizationalReportDataToS3($args->toArray());
        return new SendAgentOrganizationalReportDataToS3Response($result->toArray());
    }
}
